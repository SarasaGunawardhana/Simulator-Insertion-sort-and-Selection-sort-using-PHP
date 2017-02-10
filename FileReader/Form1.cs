using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;
using System.Threading;
namespace FileReader
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        private int countCharacter()
        {
            int count = 0;
            using(StreamReader reader = new StreamReader("I:\\projects\\data.txt"))
            {
                string content = reader.ReadToEnd();
                count = content.Length;
                Thread.Sleep(5000);

            }
            return count;
        }
        private async void label1_Click(object sender, EventArgs e)
        {
            Task<int> task = new Task<int>(countCharacter);
            task.Start();
            lblStatus.Text = "Waiting fot the result.....!";
            int count = await task;
            lblStatus.Text = count.ToString() + " characters in the file !";
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}
