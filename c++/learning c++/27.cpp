#include<iostream>
using namespace std;

class A
{
    public:
    A(int x)
    {
        cout<<"A"<< x<<endl;
    }
};
class B : public A
{
    public:
    B(int y,int z) : A(z)
    {
        cout<<"B"<<z<<endl;
        cout<<"Y"<<y<<endl;
    }

};
int main()
{
    B ob1(8,6);
}
