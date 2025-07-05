#include<iostream>
using namespace std;

//wirte an OOP complete program to represent 3 workers,
//the class constructor will set the value of salary and name for each worker
//then calculate the average of salaries for all workers using friend function

class Worker
{
    private:
    string name;
    int salary;
    public:
    Worker()
    {
       cout<<"Enter the name : "<<endl;
       cin>>name;
       cout<<"Enter the salary : "<<endl;
       cin>>salary;
    }
    friend void getSalary(Worker x,Worker y, Worker z);
};

    void getSalary(Worker x, Worker y, Worker z)
    {
        int div = (x.salary+y.salary+z.salary)/3;
    cout<<"The average is : "<<div<<endl;    
    }

int main()
{
    Worker ob1;
    Worker ob2;
    Worker ob3;

    getSalary(ob1,ob2,ob3);


}
