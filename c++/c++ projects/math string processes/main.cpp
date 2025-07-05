#include <iostream>
using namespace std;

// math functions
void sum();
void sub();
void multip();
void div();

// string functions
void addString();
void compare();

// input
void math_input(struct mathProcesses process);
void string_input(struct stringProcesses process2);

// structs
struct mathProcesses
{
    float num1 = 0;
    float num2 = 0;
    int mathProcess;

    void sum()
    {
        cout << "The result of " << num1 << " + " << num2 << " = " << num1 + num2 << endl;
    }

    void sub()
    {
        cout << "The result of " << num1 << " - " << num2 << " = " << num1 - num2 << endl;
    }
    void multip()
    {
        cout << "The result of " << num1 << " * " << num2 << " = " << num1 * num2 << endl;
    }
    void div()
    {
        cout << "The result of " << num1 << " / " << num2 << " = " << num1 / num2 << endl;
    }
};
struct stringProcesses
{
    string firstString;
    string secondString;
    int stringProcess;


    void addString()
    {
        cout << "The total text is : " << firstString + " " + secondString << endl;
    }

    void compare()
    {
        if (firstString.length() == secondString.length())
        {
            if (firstString == secondString)
            {
                cout << "The same" << endl;
            }
            else
            {
                int count = 0;
                while (count < firstString.length())
                {
                    if (firstString[count] == secondString[count])
                    {
                        cout << firstString[count] << " is equal to " << secondString[count] << endl;
                    }
                    else
                    {
                        cout << firstString[count] << " is different to " << secondString[count] << endl;
                    }
                    count++;
                }
            }
        }
        else
        {
            cout << "The not the same length" << endl;
        }
    }
};

int main()
{
    struct mathProcesses first_mathprocess;
    struct stringProcesses first_stringProcess;
    int choice = 0;
    do
    {
    there:

        cout << "Enter the mode you want : " << endl;
        cout << "1- Math processes " << endl;
        cout << "2- String Process" << endl;
        cout << "3- Exit " << endl;
        cin >> choice;

        if (choice == 1)
        {
            math_input(first_mathprocess);
        }
        else if (choice == 2)
        {
            string_input(first_stringProcess);
        }
        else if (choice == 3)
        {
        }
        else if (choice == 4)
        {
            cout << "Enter a valid Number : \n";
            goto there;
        }
    } while (choice != 3);

    return 0;
}

void math_input(struct mathProcesses process)
{
      there:
        cout << "Enter the First num : ";
        cin >> process.num1;
        cout << "Enter the Second num : ";
        cin >> process.num2;
    do
    {
  
    valid:
        cout << "\n Enter the operation you want \n"
                "1- Summation \n"
                "2- Subtraction \n"
                "3- Multiplication \n"
                "4- Division \n"
                "5- Enter new numbers \n"
                "6- Return to main page \n";
        cin >> process.mathProcess;

        if (process.mathProcess == 1)
        {
            process.sum();
        }
        else if (process.mathProcess == 2)
        {
            process.sub();
        }
        else if (process.mathProcess == 3)
        {
            process.multip();
        }
        else if (process.mathProcess == 4)
        {
            process.div();
        }
        else if (process.mathProcess == 5)
        {
            goto there;
        }
        else if (process.mathProcess == 6)
        {
        }
        else
        {
            cout << "Enter A valid number : ";
            goto valid;
        }
    } while (process.mathProcess != 6);
};
void string_input(struct stringProcesses process2)
{
    what:

      cout << "Enter the first string : ";
        cin >> process2.firstString;
        cout << "Enter the second string : ";
        cin >> process2.secondString;
        cout<<endl;
   
    do
    {

      
    hi:
        cout<< "1- Add the two strings \n"
        "2- Compare the two strings \n"
        "3- Enter new strings \n"
        "4- Return to Main page \n";
        cout << "Enter the operation you want : "; cin >> process2.stringProcess;

        if (process2.stringProcess == 1)
        {
            process2.addString();
        }
        else if (process2.stringProcess == 2)
        {
            process2.compare();
        }
        else if (process2.stringProcess == 3)
        {
            goto what;
        }
        else if (process2.stringProcess == 4)
        {
        }
        else
        {
            cout << "Enter a valid choice " << endl;
            goto hi;
        }
    } while (process2.stringProcess != 4);
}