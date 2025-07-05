#include<iostream>
using namespace std;

class Person
{
    private:
    string name;
    public:
    void setName(string n)
    {
        name=n;
    }
    void printName()
    {
        cout<<"The name is : "<<name<<endl;
    }

};
class Student : public Person
{
    private:
    int grade;
    public:
    void setGrade(int g)
    {
        grade=g;
    }
    void printGrade()
    {
        cout<<"The grade is : "<<grade<<endl;
    }
    
};

int main()
{
    Student ob1;
    ob1.setName("Ahmed");
    ob1.setGrade(70);
    ob1.printName();
    ob1.printGrade();


    return 0;
}