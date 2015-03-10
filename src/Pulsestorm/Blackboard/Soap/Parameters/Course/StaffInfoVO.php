<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class StaffInfoVO extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'vo'; 
    //start soap data
    public $available;
    public $biography;
    public $biographyType;
    public $email;
    public $expansionData;
    public $familyName;
    public $folder;
    public $givenName;
    public $homePageUrl;
    public $id;
    public $officeAddress;
    public $officeHours;
    public $parentId;
    public $persistentTitle;
    public $phone;
    public $position;
    public $sirTitle;
    public $title;
    public $titleColor;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'biography'=>$this->biography, 
            'biographyType'=>$this->biographyType, 
            'email'=>$this->email, 
            'expansionData'=>$this->expansionData, 
            'familyName'=>$this->familyName, 
            'folder'=>$this->folder, 
            'givenName'=>$this->givenName, 
            'homePageUrl'=>$this->homePageUrl, 
            'id'=>$this->id, 
            'officeAddress'=>$this->officeAddress, 
            'officeHours'=>$this->officeHours, 
            'parentId'=>$this->parentId, 
            'persistentTitle'=>$this->persistentTitle, 
            'phone'=>$this->phone, 
            'position'=>$this->position, 
            'sirTitle'=>$this->sirTitle, 
            'title'=>$this->title, 
            'titleColor'=>$this->titleColor, 
        ];

        $data = array_filter($data, function($item){
            if($item)
            {
                return true;
            }
            return false;
        });

        return $data;

    }

}