#include<iostream>
using namespace std;

class First
{
    private:
    int x;
    public:
    First()
    {
        cout<<"This is the first constructor"<<endl;
    }
};

class Second : public First
{
    private:
    int y;
    public:
    // Second()
    // {
    //     cout<<"This is the second constructor"<<endl;
    // }
};

int main()
{
    Second ob1;
    
}