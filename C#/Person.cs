using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cyclopedia
{
    abstract class Person
    {
        //Private variable
        private string fname; // ---> Field
        private string lname;
        private string email;
        private string telephone;
        private string address;

        // Encapsulation{get , set}
        public string _fname  // ---> Property
        {
            get { return fname; }     // ---> get Method
            set { fname = value; }    // ---> set Method
        }
        public string _lname 
        {
            get { return lname; }
            set { lname = value; }
        }
        public string _email 
        {
            get { return email; }
            set { email = value; }
        }
        public string _telephone 
        {
            get { return telephone; }
            set { telephone = value; }
        }
        public string _address 
        {
            get { return address; }
            set { address = value; }
        }

        //Method
        public void FullName()
        {
            Console.WriteLine("The Full Name is : " + _fname + " " + _lname);
        }

        //Abstract Method
        public abstract string personData();

        //static Method
        public static void infoAbstractClassPerson()
        {
            string InfoClassPerson = "Info Abstract Class Person ";
            InfoClassPerson += "*Frind....";
            Console.WriteLine(InfoClassPerson);
        }
    
    }
}
