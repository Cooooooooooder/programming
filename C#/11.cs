using System;
using System.Collections.Generic;
using System.Linq;
using System.Management.Instrumentation;
using System.Text;
using System.Threading.Tasks;

namespace Project1
{
    class  Person
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
                Person P = new Person();
                P._model = "M1";
                Console.WriteLine(P._model);
                P._name = "AHMED";
                Console.WriteLine(P._name);
            }
        }
    }
}
