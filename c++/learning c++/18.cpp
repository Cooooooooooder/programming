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
    }
    friend int set(Stu x);
    
    
};

int set(Stu x)
{
    return x.mark;
}



class Exam
{
    private:
    int mark;
    public:
    Exam(int m)
    {
        mark = m;
    }
    friend int set(Exam x);

};

int set(Exam x)
{
    return x.mark;
}


void sumOfMarks(Exam ob2, Stu ob1)
{
    cout<<set(ob1) + set(ob2);
}




int main()
{
    Stu ob1(70);
    Exam ob2(40);
    sumOfMarks(ob1,ob2);



    



    return 0;
}