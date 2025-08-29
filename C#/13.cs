using System;
namespace radios
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Name : Ahmed Ramadan Saleh Ahmed ");
            Console.WriteLine("Enter The Elements of matrex of order 3 * 3 : ");

            int[,] ints = new int[3, 3];
            for (int i = 0; i < ints.GetLength(0); i++)
            {
                for (int j = 0; j < ints.GetLength(1); j++)
                {
                    ints[i, j] = int.Parse(Console.ReadLine());

                }
                Console.WriteLine();
            }

            Console.WriteLine("--------------");
            Console.WriteLine("The Elements of Matrex * 2 IS : ");

            for (int i = 0; i < ints.GetLength(0); i++)
            {
                for (int j = 0; j < ints.GetLength(1); j++)
                {
                    Console.Write(ints[i, j] * 2  + "  ");

                }
            Console.WriteLine();
            }



        }
    }
}

