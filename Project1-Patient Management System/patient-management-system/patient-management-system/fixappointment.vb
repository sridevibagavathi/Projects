Imports System.Data.OleDb
Public Class fixappointment

    Dim con As New OleDbConnection
    Dim con1 As New OleDbConnection
    Dim con2 As New OleDbConnection
    Dim cmdinsert As New OleDbCommand
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        If Not IsNumeric(TextBox5.Text) And TextBox5.Text = "" Then
            MsgBox("Please enter your mobile number in the correct format")

        ElseIf IsNumeric(TextBox1.Text) Then
            MsgBox("Please enter your details in the correct format, Character cannot be accepted")

     

        ElseIf IsNumeric(TextBox3.Text) Then
            MsgBox("Please enter your details in the correct format, Character cannot be accepted")
        

        ElseIf TextBox1.Text = "" Or TextBox2.Text = "" Or TextBox3.Text = "" Or TextBox4.Text = "" Or TextBox5.Text = "" Or TextBox6.Text = "" Or ComboBox1.Text = "" Or ComboBox2.Text = "" Then
            MsgBox("Please fill your details correctly")
        Else
            Dim dbProvider As String
            Dim dbSource As String
            dbProvider = "PROVIDER=Microsoft.ACE.OLEDB.12.0;"
            dbSource = "Data Source=C:\Users\ADMIN\Documents\regpatient.accdb"
            If ask() = True Then
                MsgBox("Please check whether doctor id or time of appointment or date or patient id are not repeated ...")
            Else

                Dim sql = "INSERT INTO Table1 ([pid],[pname],[symptoms],[dateee],[address],[phone],[doctorid],[time],[gender]) VALUES (@a,@b,@c,@d,@e,@f,@g,@h,@s)"
                Using con = New OleDb.OleDbConnection(dbProvider & dbSource)
                    Using cmd = New OleDb.OleDbCommand(sql, con)
                        con.Open()
                        cmd.Parameters.AddWithValue("@pid", TextBox2.Text)
                        cmd.Parameters.AddWithValue("@pname", TextBox1.Text)
                        cmd.Parameters.AddWithValue("@symptoms", TextBox3.Text)
                        cmd.Parameters.AddWithValue("@dateee", DateTimePicker1.Text)
                        cmd.Parameters.AddWithValue("@address", TextBox4.Text)
                        cmd.Parameters.AddWithValue("@phone", TextBox5.Text)
                        cmd.Parameters.AddWithValue("@doctorid", TextBox6.Text)
                        cmd.Parameters.AddWithValue("@time", ComboBox1.Text)
                        cmd.Parameters.AddWithValue("@gender", ComboBox2.Text)
                        cmd.ExecuteNonQuery()
                        con.Close()
                        MsgBox("Patient details are registered successfully")
                        If MsgBoxResult.Ok Then
                            Receptionist_Home_Page.Show()
                            Me.Close()
                        End If
                    End Using
                End Using
            End If
        End If
    End Sub
    Public Function ask()
        Dim dt As New DataTable
        Dim ds As New DataSet
        ds.Tables.Add(dt)
        Dim da As New OleDbDataAdapter("select * from Table1", con1)
        da.Fill(dt)
        con1.Open()
        For Each DataRow In dt.Rows
            If (TextBox6.Text = DataRow.item(6) And ComboBox1.Text = DataRow.item(7) And DateTimePicker1.Text = DataRow.item(3)) Or TextBox2.Text = DataRow.item(0) Then
                con1.Close()
                Return True
            End If
        Next
        con1.Close()
        Return False

    End Function

    Private Sub TextBox5_TextChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles TextBox5.TextChanged
        TextBox5.MaxLength = 10
    End Sub

    Private Sub LinkLabel1_LinkClicked(ByVal sender As System.Object, ByVal e As System.Windows.Forms.LinkLabelLinkClickedEventArgs) Handles LinkLabel1.LinkClicked
        Receptionist_Home_Page.Show()
    End Sub

    Private Sub fixappointment_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        con1.ConnectionString = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:\Users\ADMIN\Documents\regpatient.accdb"
        con2.ConnectionString = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:\Users\ADMIN\Documents\doctorregistration.accdb"

    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        TextBox1.Clear()
        TextBox2.Clear()
        TextBox3.Clear()
        TextBox4.Clear()
        TextBox5.Clear()
        ComboBox1.Text = ""
        TextBox6.Clear()
    End Sub


End Class