#include <iostream>
using namespace std;

//     variables
int courses = 0;
int i = 1;
int totalHours = 0;
int totalGPA = 0;

int main()
{
    cout << "Enter the number of courses : ";
    cin >> courses;
    while (courses<0|| courses>10)
    {
        cout<<"Try Again ."<<endl;
        cout << "Enter the number of courses : ";
        cin >> courses;
    }
    


    for (int j = 1; j <= courses; j++)
    {
        char grade = 'i';
        int hours = 0;
        float size = 0;
        cout << "Enter The degree of course " << i << " (A ,B ,C ,D ,F ) : ";
        cin >> grade;

        while (grade != 'A' && grade != 'B' && grade != 'C' && grade != 'D' && grade != 'F' && grade != 'a' && grade != 'b' && grade != 'c' && grade != 'd' && grade != 'f')
        {
            cout<<"Invalid grade! Please try again "<<endl;
            cout << "Enter The degree of course " << i << " (A ,B ,C ,D ,F ) : ";
            cin >> grade;
        }
        
        cout << "Enter The  of number of hours of the course " << i << ": ";
        cin >> hours;

        i++;
        static int A = 4;
        static int B = 3;
        static int C = 2;
        static int D = 1;
        static int F = 0;
        if (grade == 'A' || grade == 'a')
        {
            size = A * hours;
            totalHours += hours;
        }
        else if (grade == 'b' || grade == 'b')
        {
            size = B * hours;
            totalHours += hours;
        }
        else if (grade == 'c' || grade == 'C')
        {
            size = C * hours;
            totalHours += hours;
        }
        else if (grade == 'D' || grade == 'd')
        {
            size = D * hours;
            totalHours += hours;
        }
        else if (grade == 'f' || grade == 'F')
        {
            size = F * hours;
            totalHours += hours;
        }
        totalGPA = size + totalGPA;
    }
    double gpa =0;
    gpa = (double)totalGPA / totalHours;
    cout << "The TotalGPA is : " << totalGPA << endl;
    cout << "Your TotalGPA is : " << totalHours << endl;
    cout << "Your GPA is : " << gpa << endl;
}