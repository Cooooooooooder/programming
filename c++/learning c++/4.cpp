#include<iostream>
using namespace std;

class Student
{
    public:
        int age;
        string name;
    void print()
    {
        cout<<"age : "<<age<<endl;
        cout<<"name : "<<name<<endl;
    }
};

int main()
{
    Student ob1;
    ob1.age=37;
    ob1.name="Timoor";
    ob1.print();
    Student ob2;
    ob2.name="Moomen";
    ob2.age=61;
    ob2.print();



}