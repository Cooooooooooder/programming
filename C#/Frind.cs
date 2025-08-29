using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cyclopedia
{
    internal class Friend : Person
    {
        //Enum
        public enum FrindShip
        {
            Brothers,
            Listener,
            Fun,
            Cowroker,
            School
        }

        //Private Variable
        private string FromYear;
        private FrindShip frindship;

        //Encapsulation  { get & set }
        public string _FromYear
        {
            get { return FromYear; } set { FromYear = value; }
        }

        public FrindShip _frindship
        {
            get { return frindship; }
            set { frindship = value; }
        }
        //Constructor
        public Friend(string fname , string lname ,FrindShip frindship ) 
            {
              this._fname = fname;
            this._lname = lname;
            this._frindship = frindship;
            }

        //Override (Abstract ) Method
        public override string personData()
        {
            string PersonData = "Ahmed";
            return PersonData;
        }

        //Method
        public void FrindFromYear(string fromyear)
        {
            int OldYear = Convert.ToInt32(fromyear);
            int frindFromYear = DateTime.Now.Year - OldYear;

            Console.WriteLine("We are " + frindFromYear + " frinds Yahoooo");
        }

        //Static Method
        public static void infoclassPerson()
        {
            string InfoClassPerson = "Info Class Frind ..............";

            Console.WriteLine(InfoClassPerson);
        }

    }
}
