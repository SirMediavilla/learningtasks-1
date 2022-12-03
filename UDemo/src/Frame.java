import javax.swing.*;

abstract class Frame
{
    // Abstract method (does not have a body)
    public abstract void button();

    // Regular method
    public static double add(String value1, String value2)
    {
        double val1 = Integer.parseInt(value1);
        double val2 = Integer.parseInt(value2);
        double result = val1 + val2;
        return result;
    }
    public static void sum(String message)
    {
        JOptionPane.showMessageDialog( null, message, "Result" , JOptionPane.INFORMATION_MESSAGE );
    }

    public static double minus(String value1, String value2)
    {
        double val1 = Integer.parseInt(value1);
        double val2 = Integer.parseInt(value2);
        double result = val1 - val2;
        return result;
    }
    public static void difference(String message)
    {
        JOptionPane.showMessageDialog( null, message, "Result" , JOptionPane.INFORMATION_MESSAGE );
    }

    public static double multiply(String value1, String value2)
    {
        double val1 = Integer.parseInt(value1);
        double val2 = Integer.parseInt(value2);
        double result = val1 * val2;
        return result;
    }
    public static void product(String message)
    {
        JOptionPane.showMessageDialog( null, message, "Result" , JOptionPane.INFORMATION_MESSAGE );
    }

    public static double divide(String value1, String value2)
    {
        double val1 = Integer.parseInt(value1);
        double val2 = Integer.parseInt(value2);
        double result = val1 / val2;
        return result;
    }
    public static void quotient(String message)
    {
        JOptionPane.showMessageDialog( null, message, "Result" , JOptionPane.INFORMATION_MESSAGE );
    }
}