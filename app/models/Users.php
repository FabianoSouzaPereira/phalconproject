<?php

use Phalcon\Mvc\Model;

class Users extends Model
{
 
    /** 
     * @primary   
     * @identity
     * @Column(type="interger", length=11, nullable=false, column="iduser")
     */
    private $iduser;

    /**
     * @Column(type="character varying(60)", nullable=false, column="userName")
     */
    private $userName;

    /**
     * @Column(type="character varying(90)", nullable=false, column="useremail")
     */
    public $useremail;

    /**
     * @Column(type="character varying(60)", nullable=false, column="userpassword")
     */
    public $userpassword;
    /**
     * @Column(type="character varying(30)", nullable=false, column="userType")
     */
    private $userType;	
    /**
     * @Column(type="smallint", nullable=false, column="userAttempt" DEFAULT = 0,)
     */
    private $userAttempt;	
    /**
     * @Column(type="character varying(3)", nullable=false, column="userblocked")
     */
    private $userBlocked;	
    /**
     * @Column(type="character varying(1)", nullable=false, column="userStatus")
     */
    private $userStatus;
   
    
}