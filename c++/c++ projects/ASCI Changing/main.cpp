#include <iostream>
using namespace std;

char character = ' ';
int choice = 0;
int asciinum = 0;
int charnum = 0;
int num = 0;
char asciichar = ' ';
int startascii = 0;
int endascii = 0;
char unknownvariable = 0;
int main()
{
    while (choice != 4)
    {

        cout << "ASCII Code Conversions System " << endl;
        cout << "1. Convert character to ASCII" << endl;
        cout << "2. Convert ASCII to character" << endl;
        cout << "3. Display ASCII range" << endl;
        cout << "4. Exit" << endl;

        cout << "choose an option (1-4) : ";
        cin >> choice;
        while (choice < 1 || choice > 4)
        {
            cout << "Wrong choice ! Choose an option (1-4) : ";
            cin >> choice;
        }

        if (choice == 1)
        {
            cout << "Enter a single Character: ";
            cin >> character;
            asciinum = int(character);
            cout << "The ASCII value of '" << character << "' is :" << asciinum << endl;
            ;
        }
        else if (choice == 2)
        {
            cout << "Enter an ASCII value (0-127) : ";
            cin >> charnum;
            while (charnum < 0 || charnum > 127)
            {
                cout << "Not Valid! Enter an ASCII value (0-127) : ";
                cin >> charnum;
            }
            asciichar = char(charnum);

            cout << "The ASCII value of " << charnum << " is :" << asciichar << endl;
        }
        else if (choice == 3)
        {
            do
            {
                cout << "Enter the start of the ASCII range (0-127) : ";
                cin >> startascii;
                while (startascii < 0 || startascii > 127)
                {
                    cout << "Not Valid!  Enter the start of the ASCII range (0-127) : ";
                    cin >> startascii;
                }

                cout << "Enter the end of the ASCII range (0-127): ";
                cin >> endascii;
                while (endascii < 0 || endascii > 127)
                {
                    cout << "Not Valid!  Enter the end of the ASCII range (0-127) : ";
                    cin >> endascii;
                }
                if (endascii < startascii)
                {
                    cout << "Not Valid! You Enterd the End less than the Start " << endl;
                    cout << "Try again " << endl;
                }
            } while (endascii < startascii);

            for (int i = startascii; i <= endascii; i++)
            {
                asciichar = char(i);
                cout << "ASCII " << i << ": '" << asciichar << "'" << endl;
            }
        }
        else if (choice == 4)
        {
            cout << "Thank You " << endl;
        }
    }
    return 0;
}