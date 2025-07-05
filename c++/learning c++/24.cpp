#include<iostream>
using namespace std;

class First
{
    public:
    int y=20;
    protected:
    int z=30;

};

class Second : protected First
{  
   
};
class Third : protected Second
{
    public:
    void show()
    {
        cout<<y;
    }
};

int main()
{
    Third ob1;
    ob1.show();
    Second ob3;
    cout<<ob3.y;
    First ob2;
    cout<<ob2.y;
}

