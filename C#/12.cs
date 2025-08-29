using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.InteropServices;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace Project2
{
    class Person
    {

        string model;
        public string _model
        {
            get { return _model; }
            set { _model = value; }
        }
        string name;
        public string _name
        {
            get { return _name; }
            set { _name = value; }
        }
    }
    internal class Program
    {
        static void Main(string[] args)
        {
            Person p = new Person();
            p._model = "AGG";
            Console.WriteLine(p._model);

            p._name = "HKK";
            Console.WriteLine(p._name);
        }
    }
}
