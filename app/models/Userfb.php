<?php
/**
* @author Erdi Dogan
* @web erdi.pw
*/
class Userfb extends Eloquent {

    protected $table = 'user_fb_meta';

    protected $fillable = array(
        'fbID', 'userID',
        'first_name', 'last_name',
        'link', 'location_id', 'location_name',
        'gender', 'email', 'timezone', 'locale',
        'verified', 'updated_time',
        'username',
        'rawData',
    );

    public function user() {
        return $this->belongsTo('birey_user', 'id');
    }

}