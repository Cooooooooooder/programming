#include<iostream>
using namespace std;

class Student
{
public:
    int age;
    string name;
    int grade;

};

int main()
{
    Student ob1;
    Student ob2;
    Student ob3;

    ob1.age=20;
    ob1.name="ahmed";
    ob1.grade=50;

    cout<<"ob1 's grade : " <<ob1.grade<<endl;

    ob2.age=10;
    ob2.name="hammody";
    ob2.grade=17;

    cout<<"-----------------"<<endl;

    cout<<"ob2 's age : " <<ob2.age<<endl;
    cout<<"ob2 's name : " <<ob2.name<<endl;
    cout<<"ob2 's grade : " <<ob2.grade<<endl;


    return 0;
}