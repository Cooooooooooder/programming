using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MyMath
{
    public class Arithmatic
    {
        public static void Addition(double x , double y)
        {
            Console.WriteLine(x + "+" + y +"=" + (x+y)); 
        }

        public static void Substraction(double x, double y)
        {
            Console.WriteLine(x + "-" + y + "=" + (x - y) );
        }

        public static void Multiblication(double x, double y)
        {
            Console.WriteLine(x + "*" + y + "=" + (x * y));
        }

        public static void Diviation(double x, double y)
        {
            if (y == 0)
            {
                Console.WriteLine("Can't Diviation ! ");
            }
            else
            {
                Console.WriteLine(x + "/" + y + "=" + (x / y));
            }
        }

        private static double Pi = 3.14;

        public static double _Pi
        { 
            get { return Pi; }
            set { Pi = value; }
        }









    }
}
