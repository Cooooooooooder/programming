using System;

public class Class1
{
	public Class1()
	{
		static void Main(string[] args)
		{
			float Average;
			int sum; 
			int x;
			for (int i = 0; i < 10; i++)
			{
				Console.WriteLine("Enter Numper " + (i+1));
				x = int.Parse(Console.ReadeLine());
				sum += x;

			}
			Average = sum/10;	
			Console.WriteLine("The Sum is : " +  sum);
            Console.WriteLine("The  Average is : " +  Average);

		}
	}
}
