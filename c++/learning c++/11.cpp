#include<iostream>
using namespace std;

class Company
{
    private:
        int salary;
        string name;

    public:
        void setValues()
        {
            cout<<"Enter your salary : " <<endl;
            cin>>salary;
            cout<<"Enter your name : " <<endl;
            cin>>name;
            
        }

        void printValues()
        {
            cout<<"The salary is : "<<salary<<endl;
            cout<<"The name is : "<<name<<endl;

        }

        float getSalary()
        {
            return salary;
        }


};







int main()
{
    Company ob1;
    Company ob2;
    ob1.setValues();
    ob2.setValues();
    float sum = ob1.getSalary() + ob2.getSalary();
    cout<<"The sum of the two salaries is : " <<sum<<endl;
    cout<<ob1.getSalary() + ob2.getSalary();
    return 0;
}