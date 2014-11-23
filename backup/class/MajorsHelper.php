<?php
class MajorsHelper
{
   public $results = array();
 
   public function __construct($user_inputs, $majors_csv_file)
    {
        try
        {
            $this->set_user_input($user_inputs);
            $this->set_majors($majors_csv_file);
            if (empty($user_inputs))
            {
                throw new Exception('No user input!');
            }
        }
        catch (Exception $e)
        {
            throw $e;
        }

    }

    public function set_user_input($user_inputs)
    {
        $this->user_inputs = $user_inputs;
    }

    public function set_majors($majors_csv_file)
    {
        $csv = array_map('str_getcsv', file($majors_csv_file));
        $col_names = $csv[0];

        foreach ($csv as $row)
        {
            $row_names[] = $row[0];
        }

        for ($row = 1;$row < count($csv);$row++)
        {
            for($col = 1;$col < count($csv[$row]);$col++)
            {
                $majors[$row_names[$row]][$col_names[$col]] = $csv[$row][$col];
            }
        }
        $this->majors = $majors;
    }

    public function filter_unqualified()
    {
        /* Remove unqualified majors from the majors array */
        foreach ($this->majors as $major_name => $major)
        {
            foreach($major as $criterion_name => $criterion)
            {
                if ($this->user_inputs[$criterion_name] < $criterion)
                {
                    unset($this->majors[$major_name]);
                    break;
                }
            }
        }
        unset($major);
        /* Add the names of the remaining majors to 'phase 0 results' array*/
        foreach ($this->majors as $major_name => $major)
        {
            $this->results[0][] = $major_name;
        }
    }

    /*removes all fields from user_inputs and majors that don't end in 'interest'*/
    public function strip_noninterest_fields()
    {
        foreach ($this->user_inputs as $key => $user_input)
        {
            if (!$this->ends_with($key, 'interest'))
            {
                unset($this->user_inputs[$key]);
            }
        }

        foreach ($this->majors as $major_key => $major)
        {
            foreach ($major as $key => $value)
            {
                if (!$this->ends_with($key, 'interest'))
                {
                    unset($this->majors[$major_key][$key]);
                }
           }
        }
    }

    public function calc_most_interested()
    {

        foreach ($this->majors as $major_name => $major)
        {
            $highest_interests = $this->same_highest_interests($this->user_inputs, $major);
            /* if one of the major's highest interests is also one of the user's highest interests, add to 'phase 1 results' array */                
            if (!empty($highest_interests))
            {
                $this->results[1][] = $major_name; 

                $temp_user_interests = $this->user_inputs;
                $temp_major = $major;
                $highest_interest = array_shift($highest_interests);
                unset($temp_user_interests[$highest_interest]);
                unset($temp_major[$highest_interest]);
                $second_highest_interests = $this->same_highest_interests($temp_user_interests, $temp_major);
                /* if one of the major's second highest interests is also one of the user's second highest interests or   
                   the major does not have a second highest interest, add to 'phase 2 results' array*/                         
                                  
                if ((!empty($second_highest_interests) || max($temp_major) == 0))
                {
                    $this->results[2][] = $major_name;
                }           
            } 
        }
    }

    private function highest_interests($interests)
    {
        foreach($interests as $interest_key => $interest)
        {
            if ($interest == max($interests))
            {
                $highest_interests[] = $interest_key;
            }
        }
        return $highest_interests;
    }

    private function same_highest_interests($user_interests, $major_interests)
    {
        $user_highest = $this->highest_interests($user_interests);
        $major_highest = $this->highest_interests($major_interests);
        return array_intersect($user_highest, $major_highest);
    }

    private function ends_with($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) 
        {
            return true;
        }

    return (substr($haystack, -$length) === $needle);
    }

}
