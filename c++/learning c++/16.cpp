#include<iostream>
using namespace std;

class Example
{
    private:
    int x;
    int y;
    public:
    Example();
    void sum();
    void myName();

};  

void Example::sum()
{
    cout<<"The sum is : "<<x+y<<endl;
}

Example::Example()
{
    x=20;
    y=40;
}


int main()
{
    Example ob1;
    ob1.sum();
    ob1.myName();
    
    return 0;
}

void Example::myName()
{
    cout<<"karameesh"<<endl;
}