#include<iostream>
using namespace std;

class First
{
    private:
    int x;
    public:
    First(int a)
    {   
        x=a;
        cout<<"X is "<<a<<endl;
    }
};

class Second : public First
{
    private:
    int y;
    public:
    Second(int a ,int b ):First(a)
    {   
        y=b;
        cout<<"Y is "<<b<<endl;
    }
};

int main()
{
    // First ob1(7);
    Second ob1(7,8);
}