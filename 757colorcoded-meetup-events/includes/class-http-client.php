<?php

class ColorCoded_Meetup_Events_Http_Client
{

    public function request( $url ): array
    {
        $response = [];
        try {
            $content = file_get_contents( $url );
            if ( $content !== false ) {
                $response = json_decode( $content );
            }
        } catch ( Exception $ex ) {
        }
        return $response;
    }

}
