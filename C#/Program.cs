using System;
namespace SUM_OF_THREE_NUMERS
{
    class Programe
    {
        static void Main(string[] args)
        {
            Console.WriteLine(" name : Ahmed Ramadan Saleh Ahmed");
            Console.WriteLine("Enter Numper1 : ");
            int x = int.Parse(Console.ReadLine());
            Console.WriteLine("Enter Numper2 : ");
            int y = int.Parse(Console.ReadLine());
            Console.WriteLine("Enter operation [ + , - , * , / ]");
            char c = char.Parse(Console.ReadLine());

           Console.WriteLine("-----------------");

            switch (c)
            {
                case '+':
                    Console.WriteLine("The Summetion is : ");
                    Console.WriteLine("   " + x+y);
                    break;
                case '-':
                    Console.WriteLine("The Substraction is : ");
                    Console.WriteLine("   " + (x-y));
                    break;                
                case '*':
                    Console.WriteLine("The Multiplication is : ");
                    Console.WriteLine( "   " + (x*y));
                    break;
                case '/':
                    
                    Console.WriteLine("   " + x/y);
                    break;





            }
            

        
        }
    }
}
