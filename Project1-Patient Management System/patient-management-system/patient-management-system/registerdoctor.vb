Imports System.Text
Imports System.Data.OleDb
Public Class registerdoctor
    Public Function ask()
        If CheckBox1.Checked = True Then
            Button1.Enabled = True
            Return True
        Else
            MsgBox("Please accept our terms...")
            Button1.Enabled = False
            Return False
        End If
    End Function
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        If Not IsNumeric(TextBox4.Text) And TextBox4.Text = "" Then
            MsgBox("Please enter your mobile number in the correct format")

        ElseIf IsNumeric(TextBox1.Text) Then
            MsgBox("Please enter your details in the correct format, Character cannot be accepted")

        ElseIf IsNumeric(ComboBox1.Text) Then
            MsgBox("Please enter your details in the correct format, Character cannot be accepted")

        ElseIf IsNumeric(ComboBox1.Text) Then
            MsgBox("Please enter your details in the correct format, Character cannot be accepted")
        ElseIf TextBox1.Text = "" Or ComboBox1.Text = "" Or TextBox3.Text = "" Or TextBox4.Text = "" Then
            MsgBox("Please fill your details correctly")
        Else
            TextBox2.Text = GeneratePassword()
            Dim dbProvider As String
            Dim dbSource As String


            dbProvider = "Provider=Microsoft.ACE.OLEDB.12.0;"
            dbSource = "Data Source=C:\Users\ADMIN\Documents\doctorregistration.accdb"


            Dim sql = "INSERT INTO Table1 ([Name],[DOB],[Sex],[Address],[Phone],[password],[docid]) VALUES (@a,@b,@c,@d,@e,@f,@g)"

            Using con = New OleDb.OleDbConnection(dbProvider & dbSource)
                Using cmd = New OleDb.OleDbCommand(sql, con)
                    con.Open()

                    cmd.Parameters.AddWithValue("@Name", TextBox1.Text)
                    cmd.Parameters.AddWithValue("@DOB", DateTimePicker1.Text)
                    cmd.Parameters.AddWithValue("@Sex", ComboBox1.Text)
                    cmd.Parameters.AddWithValue("@Address", TextBox3.Text)
                    cmd.Parameters.AddWithValue("@Phone", TextBox4.Text)
                    cmd.Parameters.AddWithValue("@password", TextBox2.Text)
                    cmd.Parameters.AddWithValue("@docid", TextBox5.Text)
                    cmd.ExecuteNonQuery()
                    con.Close()
                    MsgBox("Please the doctor name( as username) and password for further login")

                End Using
                
            End Using
            doctorlogin.Show()
            Me.Close()
        End If
    End Sub

    Private Sub CheckBox1_CheckedChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles CheckBox1.CheckedChanged
        ask()
    End Sub

    Private Sub TextBox4_TextChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles TextBox4.TextChanged
        TextBox4.MaxLength = 10
    End Sub

    Private Sub registerdoctor_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load


    End Sub
    Function GeneratePassword()
        Dim s As String = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"
        Dim r As New Random
        Dim sb As New StringBuilder
        For i As Integer = 1 To 8
            Dim idx As Integer = r.Next(0, 61)
            sb.Append(s.Substring(idx, 1))
        Next
        Return sb.ToString()
    End Function
End Class