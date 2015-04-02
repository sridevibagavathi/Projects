Imports System.Text
Imports System.Data.OleDb
Public Class rregister
    Dim con As New OleDbConnection
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
        If IsNumeric(TextBox1.Text) Then
            MsgBox("Please enter your details in the correct format, Character cannot be accepted")

        ElseIf IsNumeric(ComboBox1.Text) Then
            MsgBox("Please enter your details in the correct format, Character cannot be accepted")

        ElseIf IsNumeric(TextBox3.Text) Then
            MsgBox("Please enter your details in the correct format, Character cannot be accepted")
        ElseIf TextBox1.Text = "" Or ComboBox1.Text = "" Or TextBox3.Text = "" Then
            MsgBox("Please fill your details correctly")
        Else
            TextBox4.Text = GeneratePassword()
            Dim dbProvider As String
            Dim dbSource As String
            dbProvider = "PROVIDER=Microsoft.Ace.OLEDB.12.0;"
            dbSource = "Data Source=C:\Users\ADMIN\documents\reg.accdb"
            Dim sql = "INSERT INTO Table1 ([Name],[DOB],[Sex],[School],[Pass]) VALUES (@a,@b,@c,@d,@e)"
            Using con = New OleDb.OleDbConnection(dbProvider & dbSource)
                Using cmd = New OleDb.OleDbCommand(sql, con)
                    con.Open()
                    cmd.Parameters.AddWithValue("@Name", TextBox1.Text)
                    cmd.Parameters.AddWithValue("@DOB", DateTimePicker1.Text)
                    cmd.Parameters.AddWithValue("@Sex", ComboBox1.Text)
                    cmd.Parameters.AddWithValue("@School", TextBox3.Text)
                    cmd.Parameters.AddWithValue("@Pass", TextBox4.Text)
                    cmd.ExecuteNonQuery()
                    con.Close()
                    MsgBox("Now you are a member... Please use the username you mentioned in the registration form and password for login")
                End Using
            End Using
            login.Show()
            Me.Close()
        End If
    End Sub

    Private Sub CheckBox1_CheckedChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles CheckBox1.CheckedChanged
        ask()
    End Sub

    Function GeneratePassword()
        Dim s As String = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"
        Dim r As New Random
        Dim sb As New StringBuilder
        For i As Integer = 1 To 8
            Dim idx As Integer = r.Next(0, 35)
            sb.Append(s.Substring(idx, 1))
        Next
        Return sb.ToString()
    End Function

    Private Sub rregister_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load

    End Sub
End Class