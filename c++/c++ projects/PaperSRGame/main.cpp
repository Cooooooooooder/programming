#include <iostream>
#include<cstdlib>
#include<ctime>

using namespace std;

int x = 0;
int y = 0;
int main()
{
    while (true)
    {
        cout << "Welcome to New game : " << endl;
        cout << "---------------------" << endl;
        cout << "Enter (1 , 2 , 3) -> (Paper , Scissors , Rock ) : ";
        cin >> x;
        while (x < 1 || x > 3)
        {
            cout << "Wrong Choice!  Try again " << endl;
            cout << "Enter (1 , 2 , 3) -> (Paper , Scissors , Rock ) : ";
            cin >> x;
        }
        srand(time(0));
        y = std::rand()% 3+1;

        while (x == y)
        {
            cout << "You are Equal!  Try again" << endl;
            cout << "Enter (1 , 2 , 3) -> (Paper , Scissors , Rock ) : ";
            cin >> x;
        }

        if (x == 1 && y == 2)
        {
            cout<<"You Choiced : Paper"<<endl;
            cout<<"Computer Choiced : Scissors"<<endl;
            cout << "Computer Wins >< " << endl;
        }
        else if (x == 1 && y == 3)
        {
            cout<<"You Choiced : Paper"<<endl;
            cout<<"Computer Choiced : Rock"<<endl;

            cout << "YOU WINS !!!" << endl;
        }
        else if (x == 2 && y == 1)
        {
            cout<<"You Choiced : Scissors"<<endl;
            cout<<"Computer Choiced : Paper"<<endl;

            cout << "YOU WINS !!!" << endl;
        }
        else if (x == 2 && y == 3)
        {
            cout<<"You Choiced : Scissors"<<endl;
            cout<<"Computer Choiced : Rock"<<endl;

            cout << "Computer Wins >< " << endl;
        }
        else if (x == 3 && y == 1)
        {
            cout<<"You Choiced : Rock"<<endl;
            cout<<"Computer Choiced : Paper"<<endl;

            cout << "Computer Wins >< " << endl;
        }
        else if (x == 3 && y == 2)
        {
            cout<<"You Choiced : Rock"<<endl;
            cout<<"Computer Choiced : Scissors"<<endl;

            cout << "YOU WINS !!!" << endl;
        }
    }
}