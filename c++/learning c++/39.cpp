#include<iostream>
using namespace std;

// write an oop complete program to represent 20 students
//the class constructor will set values to all data members for each student 
//then calculate the average for all student using friend function
int count= 1;
int x = 0;
class Student
{
    private:
    string name = "unknown";
    int id = 0;
    public: 
    Student()
    {

        cout<<"The ID "<<count<<" is : ";
        cin>>id;
        count++;
    }
    friend void average(Student ob[]);
};
void average(Student ob[])
{
    int sum = 0;
    for(int i=0 ; i<x; i++)
    {
        sum = sum + ob[i].id;
    }
    double average = 0; 
    average = (double) sum / x;
    cout<<"The average is : "<<average<<endl;
}

int main()
{
    cout<<"Enter the number of the Students : ";
    cin>>x;
    Student ob[x];
   average(ob);

}