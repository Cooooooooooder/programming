#include<iostream>
using namespace std;

// write an oop complete program to represent the student ;
//data members are name , age ,grade , id 
//the class constructor set the values to all its data members
//then create a mother class to represent the university,
//use member function of the second class to print the values of the first class

class Student
{
    private:
    string name="unknown";
    int age=0;
    int grade=0;
    int id= 0;
    public:
    Student(string n, int a, int g, int i)
    {
        name = n;
        age = a;
        grade = g;
        id = i;
    }
    friend class University;

};

class University 
{
    public:
    void print(Student x)
    {

        cout<<"The name is : "<<x.name<<endl;
        cout<<"The age is : "<<x.age<<endl;
        cout<<"The grade is : "<<x.grade<<endl;
        cout<<"The id is : "<<x.id<<endl;
    }


};

int main()
{
    Student ob1("hassona", 70 , 600, 102020);
    University ob2;
    ob2.print(ob1);

    
}