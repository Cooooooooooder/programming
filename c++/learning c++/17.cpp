#include<iostream>
using namespace std;

class School
{
    private:
    string name;
    int mark;

    public:
    School(string n, int m)
    {
        name=n;
        mark=m;
    }
    void getMarks(School x, School y)
    {
        cout<<x.mark+y.mark<<endl;
    }
    void multiply(School fnum, School snum)
    {
        cout<<fnum.mark*snum.mark<<endl;
    }
    void host(School nana, School hala)
    {
        cout<<nana.name+hala.name<<endl;
    }
};

int main()
{
    School ob1("hana" , 22);
    School ob2("Lila" , 71);
    ob1.getMarks(ob1,ob2);
    ob2.multiply(ob1,ob2);
    ob1.host(ob2,ob1);
    return 0;
}