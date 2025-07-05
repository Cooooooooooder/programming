#include<iostream>
using namespace std;

class Sum
{
    private:
    int x=0;
    public:
    void set(int y)
    {
        x = y;
    } 
    void operator + (Sum ob2)
    {
        
    cout<<x<<"+"<<ob2.x<<"="<<x+ob2.x<<endl;

    }
};

int main()
{
    Sum ob1;
    Sum ob2;
    ob1.set(88);
    ob2.set(20);
    // ob1.check(ob2);
    // ob1.+(ob2);
    ob1+ob2;
}