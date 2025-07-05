#include<iostream>
using namespace std;

class Dontworry
{
    private:
    int x=0;
    public:
    void set()
    {
        cout<<"Enter the value of x : ";
        cin>>x;
    }
    void compare(Dontworry ob2)
    {
        if (x == ob2.x)
        {
            cout<<"Equal"<<endl;
        }
        else 
        {
            cout<<"NO Equal"<<endl;
        }
    }
};

int main()
{
    Dontworry ob1;
    Dontworry ob2;
    ob1.set();
    ob2.set();
    ob1.compare(ob2);
   

}