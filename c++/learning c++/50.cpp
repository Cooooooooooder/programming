#include<iostream>
using namespace std;

class Count
{
    private:
        int value = 0;
    public:
        void set()
        {
            cout<<"Enter the value : ";
            cin>>value;
        }
        void fun(Count ob1, Count ob2)
        {
            ob2.value = ob1.value +1;
        }
        void display(Count ob)
        {
            cout<<ob.value;
        }
};

int main()
{
    Count ob1;
    Count ob2;
    ob1.set();
    ob2.set();
    ob1.fun(ob1,ob2);
    ob2.display(ob2);
}
