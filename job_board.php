/**
         * filter through job listings on a job board, checking job requirements against current 
         * qualifications, to determine jobs qualified to apply for.
         */

        // job board companies' data
        $job_board = [
            ["company" => "company A", "requirement" => "an apartment or house, and property insurance"],
            ["company" => "company B", "requirement" => "5 door car or 4 door car, and a driver's license and car insurance"],
            ["company" => "company C", "requirement" => "social security number and a work permit"],
            ["company" => "company D", "requirement" => "an apartment or a flat or a house"],
            ["company" => "company E", "requirement" => "a driver's license and a 2 door car or a 3 door car or a 4 door car or a 5 door car"],
            ["company" => "company F", "requirement" => "a scooter or a bike, or a motorcycle and a driver's license and motorcycle insurance"],
            ["company" => "company G", "requirement" => "a massage qualification certificate and a liability insurance"],
            ["company" => "company H", "requirement" => "a storage place or a garage"],
            ["company" => "company I", "requirement" => null],
            ["company" => "company J", "requirement" => "a PayPal account"],
        ];

        // my qualifications
        $qualifications = [
            "bike",
            "driver's license"
        ];

        //get jobs i am qualified for
        $prospects = [];

        foreach ($job_board as $job) {
            if (!$job['requirement']) {
                $prospects[] = $job['company'];
            }else {
                foreach ($qualifications as $q) {
                    if (strpos($job['requirement'], $q)) {
                        $prospects[] = $job['company'];
                    }
                }
            }
        };

        return $prospects;
