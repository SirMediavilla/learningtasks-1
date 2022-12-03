import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

class Out extends Frame
{
    public void button()
    {
        // Frame and Panel
        JFrame frame = new JFrame("Simple Addition");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JPanel panelTitle = new JPanel(new FlowLayout());
        JPanel panelOne = new JPanel(new GridLayout(2,2,1,1));
        JPanel panelTwo = new JPanel(new FlowLayout());

        // Setting the panel sizes
        panelTitle.setBounds(10,10,380,40);
        panelOne.setBounds(10,60,380,80);
        panelTwo.setBounds(10,200,380,40);

        // Color for visualization only
        panelTitle.setBackground(Color.cyan);
        panelOne.setBackground(Color.yellow);
        panelTwo.setBackground(Color.blue);

        JLabel labelOne, labelTwo, labelTitle;

        JTextField tFieldOne, tFieldTwo;
        tFieldOne = new JTextField(20);
        tFieldOne.setPreferredSize(new Dimension(80,20));
        tFieldTwo = new JTextField(20);
        tFieldTwo.setPreferredSize(new Dimension(80,20));

        labelTitle = new JLabel("Enter required:", JLabel.CENTER);
        labelOne = new JLabel("First Value");
        labelTwo = new JLabel("Second Value");

        labelTitle.setBounds(10,10,90,20);
        labelOne.setBounds(10,10,90,20);
        tFieldOne.setBounds(5, 5, 100, 100);
        labelTwo.setBounds(10,10,90,20);
        tFieldTwo.setBounds(5, 5, 100, 100);

        frame.add(panelTitle);
        frame.add(panelOne);
        frame.add(panelTwo);

        //OUTPUT
        panelTitle.add(labelTitle);
        panelOne.add(labelOne);
        panelOne.add(tFieldOne);
        panelOne.add(labelTwo);
        panelOne.add(tFieldTwo);

        //BUTTONS
        JButton addButton = new JButton("Add");
        addButton.setBounds(10,10,90,20);
        addButton.addActionListener(new ActionListener()
        {
            @Override
            public void actionPerformed(ActionEvent e)
            {
                //System.out.println("Button Clicked");
                //System.out.println(tFieldOne.getText());
                //System.out.println(tFieldTwo.getText());
                double result = add(tFieldOne.getText(),tFieldTwo.getText());
                //System.out.println(result);
                sum(String.valueOf(result));
            }
        });
        panelTwo.add(addButton);

        JButton minusButton = new JButton("Subtract");
        minusButton.addActionListener(new ActionListener()
        {
            @Override
            public void actionPerformed(ActionEvent e)
            {
                //System.out.println("Button Clicked");
                //System.out.println(tFieldOne.getText());
                //System.out.println(tFieldTwo.getText());
                double result = minus(tFieldOne.getText(),tFieldTwo.getText());
                //System.out.println(result);
                difference(String.valueOf(result));
            }
        });
        panelTwo.add(minusButton);

        JButton multiplyButton = new JButton("Multiply");
        multiplyButton.addActionListener(new ActionListener()
        {
            @Override
            public void actionPerformed(ActionEvent e)
            {
                //System.out.println("Button Clicked");
                //System.out.println(tFieldOne.getText());
                //System.out.println(tFieldTwo.getText());
                double result = multiply(tFieldOne.getText(),tFieldTwo.getText());
                //System.out.println(result);
                product(String.valueOf(result));
            }
        });
        panelTwo.add(multiplyButton);

        JButton divideButton = new JButton("Divide");
        divideButton.addActionListener(new ActionListener()
        {
            @Override
            public void actionPerformed(ActionEvent e)
            {
                //System.out.println("Button Clicked");
                //System.out.println(tFieldOne.getText());
                //System.out.println(tFieldTwo.getText());
                double result = divide(tFieldOne.getText(),tFieldTwo.getText());
                //System.out.println(result);
                quotient(String.valueOf(result));
            }
        });
        panelTwo.add(divideButton);

        //FRAME DETAILS
        // make the frame half the height and width
        Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
        int height = screenSize.height;
        int width = screenSize.width;
        // set size to half of screen
        //frame.setSize(width/2, height/2);

        frame.setSize(400,300);
        frame.setResizable(false);
        frame.setLayout(null);

        // center the jframe on screen
        frame.setLocationRelativeTo(null);
        frame.setVisible(true);

    }
}