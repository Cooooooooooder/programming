#include<iostream>
using namespace std;

//write a complete OOP program to represent the teacher class define two 
//data members then define an enginner class with two data members use a 
//friend function to add 1000$ on the salaries of a teacher named Ali and
//engineer named Ahmed
//just ali and ahmed
class Engineer;
class Teacher
{
    private:
    string name;
    int salary;
    public:
    Teacher(string nam , int salar)
    {
        name = nam;
        salary = salar;
    }
    friend void check(Engineer y,Teacher x);
    // friend string getName(Teacher x);
};

 


class Engineer
{
    private:
    string name;
    int salary;
    public:
    Engineer(string nam ,int salar)
    {
        name = nam;
        salary = salar;
    }
    friend void check(Engineer y,Teacher x);
    // friend string getName(Engineer x);
};

void check(Engineer y,Teacher x)
{   if (y.name=="Ahmed"&&x.name=="Ali")
        {
        cout<<"The new salary of Ali is : "<<x.salary+1000<<endl;
        cout<<"The new salary of Ahmed is : "<<y.salary+1000<<endl;
        }
}

int main()
{
    Teacher ob1("hasem", 2000);
    Engineer ob2("hammed", 300);
    check(ob2,ob1);    

}