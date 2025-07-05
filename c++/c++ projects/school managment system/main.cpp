#include <iostream>
using namespace std;
int stop = 0;
int counter = 0;
int mainChoice = 0;
string teachers[50];
string students[50];
int ageteachers[50];
int agestudents[50];

void addTeacher()
{

    int counter = 0;
    while (stop == 0)
    {
        counter++;
        cout << "Enter the name of teacher " << counter << endl;
        cin >> teachers[counter - 1];
        cout << "Enter the age of teacher " << counter << endl;
        cin >> ageteachers[counter - 1];
        cout << "To exit Enter teacher is 4 and the age is 4" << endl;
        cout << "-----------------" << endl;
        cout << endl;
        if (teachers[counter - 1] == "4" && ageteachers[counter - 1] == 4)
        {
            stop = 4;
        }
    }

    int count = 0;
    for (int j = 0; j < counter - 1; j++)
    {
        count++;
        cout << "Teacher " << count << " : " << teachers[j] << endl;
        cout << "Teacher's " << count << " age is : " << ageteachers[j] << endl;
        cout<<endl;
    }
}


void addStudent()
{

    int counter = 0;
    while (stop == 0)
    {
        counter++;
        cout << "Enter the name of Student " << counter << endl;
        cin >> students[counter - 1];
        cout << "Enter the age of Student " << counter << endl;
        cin >> agestudents[counter - 1];
        cout << "To exit Enter teacher is 4 and the age is 4" << endl;
        cout << "-----------------" << endl;
        cout << endl;
        if (students[counter - 1] == "4" && agestudents[counter - 1] == 4)
        {
            stop = 4;
        }
    }

    int count = 0;
    for (int j = 0; j < counter - 1; j++)
    {
        count++;
        cout << "Teacher " << count << " : " << students[j] << endl;
        cout << "Teacher's " << count << " age is : " << agestudents[j] << endl;
        cout<<endl;
    }
}

int main()
{

    cout << "----- Welcom to the school managment system -----" << endl;
    do
    {
        cout << "Press 1 for adding teachers " << endl;
        cout << "Press 2 for adding students " << endl;
        cout << "Press 3 for exit " << endl;
        cout << "------------------" << endl;
        cout << "Enter Your prefere : ";
        cout << endl;
        cin >> mainChoice;

        if (mainChoice == 1)
        {
            addTeacher();
        }
        else if (mainChoice == 2)
        {
            addStudent();
        }
        else if (mainChoice == 3)
        {
        }
        else
        {
            cout << "Not Valid choice " << endl;
            cout << "Enter new choice " << endl;
        }
    } while (mainChoice != 3);
}
