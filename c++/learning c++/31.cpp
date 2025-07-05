#include<iostream>
using namespace std;

class E1
{
    private:
    int mark;
    public:
    E1(int m)
    {
        mark = m;
    }
    friend int getMark(E1 x);
};

    int getMark(E1 x)
    {
        return x.mark;
    }
class E2
{
    private:
    int mark;
    public:
    E2(int m)
    {
        mark = m;
    }
    
    friend int getMark(E2 x);
};

    int getMark(E2 x)
    {
        return x.mark;
    }

void sum(E1 x,E2 y)
{
    int sum;
    sum = getMark(x)+getMark(y);
    cout <<"SSSSSSSSSSUUUUUUUUUUUUUMMMMMMMMMMMMMM  ::   "<<sum<<endl;
}

int main()
{
    E1 ob1(200);
    E2 ob2(300);
    sum(ob1,ob2);
    
}