#include<iostream>
using namespace std;
 //@@                                      //Multible inheritance
class Person
{
    private:
    string name;
    int age;
    public:
    Person(string n, int a)
    {
        name = n;
        age = a;
    }
    void print()
    {
        cout<<"The name is : "<<name<<endl;
        cout<<"The age is : "<<age<<endl;
    }
};
class Student : public Person
{
    private:
    int grade;
    public:
    Student(string n, int a, int g) : Person(n,a)
    {
        grade = g;
    }
    void print()
    {   Person :: print();
        cout<<"The grade is : "<<grade<<endl;
    }
};
class Employee : public Student
{
    private:
    int id;
    int salary;
    public:
    Employee(string n, int a, int g, int i,int s) : Student(n,a,g)
    {
        id = i;
        salary = s;
    }
    void print()
    {   

        
        Student :: print();
        cout<<"The id is : "<<id<<endl;
        cout<<"The salary is : "<<salary<<endl;
    }
};




int main()
{
    Student ob("ibrahim", 20,100);
    ob.print();
    Employee ob1("Fares", 30,133,74432,15000);
    ob1.print();

}