#include<iostream>
using namespace std;

class Stu
{
    private:
    int mark;
    public:
    Stu(int m)
    {   
        mark = m;
    };
    void print();
    friend void show(Stu x);
};

void Stu::print()
    {
        cout<<"Your mark is : "<<mark<<endl;
    }
void show(Stu x)
{
    cout<<x.mark<<endl;
}
void display(Stu x)
{
    x.print();
    cout<<"Friend show Function "<<endl;
}
int main()
{
    Stu ob1(400);
    ob1.print();
    show(ob1);
    display(ob1);

    // show(8888);
}