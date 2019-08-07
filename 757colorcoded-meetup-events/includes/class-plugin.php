<?php

class ColorCoded_Meetup_Events_Plugin
{
 
    const API_URL = 'https://api.757colorcoded.org/events';

    private $repository;

    public function run()
    {
        $new_events = $this->repository->fetch_new_events();
        $cached_events = $this->repository->fetch_cached_events();

        foreach ($events as $event) {
            $this->repository->add_event($event);
        }
    }
    
}