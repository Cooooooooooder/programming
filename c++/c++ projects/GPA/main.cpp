#include <iostream>
using namespace std;

//     variables
int courses=0;
int i = 1;
int totalHours =0;
int totalGPA =0;
class GPA
{
private:
    char grade =i ;
    int hours =0;

public:
    GPA()

    {
        do
        {
            cout << "Enter The degree of course " << i << " (A ,B ,C ,D ,F ) : ";
            cin >> grade;
            if (grade == 'A' || grade == 'B' || grade == 'C' || grade == 'D' || grade == 'F' || grade == 'a' || grade == 'b' || grade == 'c' || grade == 'd' || grade == 'f')
            {
                cout << "Enter The  of number of hours of the course " << i << ": ";
                cin >> hours;
            }
            else
            {
                cout << "Invalid grade entered. Please try again " << endl;
            }
        } while (grade != 'A' && grade != 'B' && grade != 'C' && grade != 'D' && grade != 'F' && grade != 'a' && grade != 'b' && grade != 'c' && grade != 'd' && grade != 'f');
        i++;
        static int A = 5;
        static int B = 4;
        static int C = 3;
        static int D = 2;
        static int F = 1;
        if(grade == 'A' || grade == 'a')
        {
        totalGPA += A;
        totalHours += hours;
        }
        else if(grade == 'b' || grade == 'b')
        {
        totalGPA += B;
        totalHours += hours;

        }
        else if(grade == 'c' || grade == 'C')
        {
        totalGPA += C;
        totalHours += hours;
        }
        else if(grade == 'D' || grade == 'd')
        {
        totalGPA += D;
        totalHours += hours;

        }
        else if(grade == 'f' || grade == 'F')
        {
        totalGPA += F;
        totalHours += hours;
        }
    }

};

void finalGPA()
{
    double gpa ;
    gpa = (double) totalGPA/totalHours;
    cout<<"The TotalGPA is : "<<totalGPA<<endl;
    cout<<"Your TotalGPA is : "<<totalHours<<endl;
    cout<<"Your GPA is : "<<gpa<<endl;
}

int main()
{
    cout << "Enter the number of courses : ";
    cin >> courses;
    GPA ob[courses];
    finalGPA();
}