using System.Collections.Generic;
using System.Collections.Specialized;
using System.ComponentModel;
using System.Linq;
using System.Net.NetworkInformation;
using System.Reflection;
using System.Security.Cryptography.X509Certificates;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;
using System.IO;

using System;
using System.Runtime.CompilerServices;

namespace Project_1
{
    class Program
    { 
        public static void Main(string[] args)
        {

            Employee employee = new Employee();
            Doctor doctor = new Doctor();

            Person person = new Person();
            person.PrintType();
            employee.PrintType();
            doctor.PrintType();




        }
    }
    class Person
    {
        public  void PrintType()
        {
            Console.WriteLine("Person");
        }
    }
    class Employee : Person
    {
        public void PrintType()
        {
            Console.WriteLine("Employee");
        }


    }
    class Doctor : Person
    {
        public void PrintType()
        {
            Console.WriteLine("Doctor");
        }

    }
}


 