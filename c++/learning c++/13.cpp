#include<iostream>
using namespace std;

//Parametrised Constructor
class Test
{
    private:
    int a;
    int b;
    public:
    Test()
    {
        cout<<"Hi iam a default constructor"<<endl;
    }
    Test(int x, int y)
    {
        a=x;
        b=y;
    }
    void print()
    {
        cout<<a<<endl;
        cout<<b<<endl;

    }
};


int main()
{
    Test ob1;
    Test ob2(30,40);

    ob1.print();
    ob2.print();
    

 return 0;   
}