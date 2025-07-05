#include<iostream>
using namespace std;

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
    {
        cout<<"The grade is : "<<grade<<endl;
    }
};
class Employee : public Person
{
    private:
    int id;
    int salary;
    public:
    Employee(string n, int a, int i,int s) : Person(n,a)
    {
        id = i;
        salary = s;
    }
    void print()
    {   Person :: print();
        cout<<"The id is : "<<id<<endl;
        cout<<"The salary is : "<<salary<<endl;
    }
};




int main()
{
    Employee ob1("Fares", 30,74432,15000);
    ob1.print();

}