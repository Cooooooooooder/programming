using System;
using System.Collections.Generic;
using System.Diagnostics.CodeAnalysis;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace oop
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Enter Your degree1 :");
            int degree1 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Enter Your Operation ");
            char operation = Convert.ToChar(Console.ReadLine());
            Console.WriteLine("Enter Your degree2 :");
            int degree2 = Convert.ToInt32(Console.ReadLine());
            
            switch (operation)
            {
                case '+':
            Console.WriteLine("Your sum is :");

                    Console.WriteLine(E1(degree1, degree2));
                    break;
                case '-':
                    Console.WriteLine("Your substraction is :");

                    Console.WriteLine(E2(degree1, degree2));
                    break;
                case '*':
                    Console.WriteLine("Your multiblication is :");

                    Console.WriteLine(E3(degree1, degree2));
                    break;
            
                case '/':
            Console.WriteLine("Your deviation is :");

                    Console.WriteLine(E4(degree1, degree2));
                    break;


            }
          
            
        }

        public static int E1(int x , int y )

        {
            int sum = x + y;
            return sum;
        }

        public static double E1(double x, double y)

        {
            double sum = x + y;
            return sum;
        }
        //**************************************
        public static int E2(int x, int y)

        {
            int sum = x - y;
            return sum;
        }

        public static double E2(double x, double y)

        {
            double sum = x - y;
            return sum;
        }
        //***************************************
        public static int E3(int x, int y)

        {
            int sum = x * y;
            return sum;
        }

        public static double E3(double x, double y)

        {
            double sum = x * y;
            return sum;
        }
        //**************************************

        public static int E4(int x, int y)

        {
            int sum = x / y;
            return sum;
        }

        public static double E4(double x, double y)

        {
            double sum = x / y;
            return sum;
        }


    }

}
