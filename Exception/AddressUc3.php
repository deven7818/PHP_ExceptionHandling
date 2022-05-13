<?php
include 'ContactInfo.php';

/**
 * Uc-3
 * 1.Create contact in address book with following details
 *   - first name, last name, address, city, state, zip, phone number and email.
 * 2.Add a new Contact to Address Book
 * 3.Edit contact information using first name
 */
class Address_Book
{
    public $contactArray = array();
    public $person;

    function welcomeMessage()
    {
        echo "Welcome to Address Book Computation Problem\n";
    }

    /**
     * Function to get details from User
     */
    function addNewContact()
    {
        $firstName = readline('Enter Your First Name : ');
        $lastName = readline('Enter Your Last Name : ');
        $address = readline('Enter Your Address : ');
        $city = readline('Enter Your City : ');
        $state = readline('Enter Your State : ');
        $zip = readline('Enter Your Zip : ');
        $phoneNumber = readline('Enter Your Phone Number : ');
        $email = readline('Enter Your Email : ');

        $this->person = new ContactInfo($firstName, $lastName, $address, $city, $state, $zip, $phoneNumber, $email);
        array_push($this->contactArray, $this->person);
    }

    /**
     * Function to edit a contact by first name
     */
    function editContact()
    {
        $editName = readline('\nEnter First Name of Person to Edit : ');
        for ($i = 0; $i < count($this->contactArray); $i++) {
            $name = $this->contactArray[$i];
            echo "First Name: " . $name->getFirstName() . "\n";
            if ($editName == $name->getFirstName()) {
                $firstName = readline('Edit First Name : ');
                $lastName = readline('Edit Last Name : ');
                $address = readline('Edit Address : ');
                $city = readline('Edit City : ');
                $state = readline('Edit State : ');
                $zip = readline('Edit Zip : ');
                $phoneNumber = readline('Edit Mobile Number : ');
                $email = readline('Edit Email : ');

                $name->setFirstName($firstName);
                $name->setLastName($lastName);
                $name->setAddress($address);
                $name->setCity($city);
                $name->setState($state);
                $name->setZip($zip);
                $name->setPhoneNumber($phoneNumber);
                $name->setEmail($email);

                $this->contactArray[$i] = $name;
                $this->showContactDetails();
                break;
            } else {
                echo "The name does not exist.";
            }
        }
    }

    /**
     * Function Print the details of the User
     */
    function showContactDetails()
    {
        for ($i = 0; $i < count($this->contactArray); $i++) {
            echo "\nFirst Name : " . $this->person->getFirstName()
                . "\nLast Name : " . $this->person->getLastName()
                . "\nAddress : " . $this->person->getAddress()
                . "\nCity : " . $this->person->getCity()
                . "\nState : " . $this->person->getState()
                . "\nZip : " . $this->person->getZip()
                . "\nPhone Number : " . $this->person->getPhoneNumber()
                . "\nEmail : " . $this->person->getEmail();
        }
    }
}
$addressBook = new Address_Book();
$addressBook->welcomeMessage();
$addressBook->addNewContact();
$addressBook->showContactDetails();
$addressBook->editContact();