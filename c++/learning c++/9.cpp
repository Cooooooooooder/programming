#include<iostream>
using namespace std;

class Company
{
    private:
        string name;
        int id;
        int salary;

    public:
    // void set(string n, int i , int s)
    // {
    //     name=n;
    //     id=i;
    //     salary=s;
    // }

    void display()
    {
        cout<<"Your name is : "<<name<<endl;
        cout<<"Your id is : "<<id<<endl;
        cout<<"Your salary is : "<<salary<<endl;

    }
    void x()
    {
         cout<<"Enter your name : "<<endl;
    cin>>name;
    cout<<"Enter your id : "<<endl;
    cin>>id;  
    cout<<"Enter your salary : "<<endl;
    cin>>salary;
    }

};


int main()
{
    string name;
    int id;
    int salary;
   

    Company ob1;
    Company ob2;
    Company ob3;
    Company ob4;
    ob1.x();
    ob1.display();
    ob2.x();
    ob2.display();
    ob3.x();
    ob3.display();
    ob4.x();
    ob4.display();

    return 0;
}

