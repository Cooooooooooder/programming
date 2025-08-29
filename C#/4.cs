

using System;
namespace ARRAYS
{
    class Programe
    {

        static void Main(string[] args)
        {
            //    char[] cname = new char[5];
            //    cname[0] = 'A';
            //    cname[1] = 'H';
            //    cname[2] = 'M';
            //    cname[3] = 'E';
            //    cname[4] = 'D';
            // Console.WriteLine(cname[0].ToString() + cname[1]);
            // string strname = new string (cname);
            //Console.WriteLine(strname);

            string name = "hammed ahmed alaaa noor ";
            char[] chars = name.ToCharArray();
            Console.WriteLine(chars);
            for (int i = 0; i < chars.Length; i++)
            {
                Console.WriteLine(chars[i]);
            }





        }
    }
}


















